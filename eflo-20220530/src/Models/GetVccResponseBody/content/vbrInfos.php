<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vbrInfos\vbrBgpPeers;
use AlibabaCloud\Tea\Model;

class vbrInfos extends Model
{
    /**
     * @description CEN ID
     *
     * @example cen-cx0qua8q6cm4z9****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the data address was created.
     *
     * @example 1683250981000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1673578603000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The status of the VBR. Valid values:
     *
     *   unconfirmed
     *   active: The VPN gateway is in a normal state.
     *   terminating: The connection is being terminated.
     *   terminated: The connection is terminated.
     *   recovering: The task is being recovered.
     *   deleting: The GDN is being deleted.
     *   Available: The service is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description BGP neighbor information list
     *
     * @var vbrBgpPeers[]
     */
    public $vbrBgpPeers;

    /**
     * @description The ID of the border router.
     *
     * @example vbr-wz96agu9h3d50z****
     *
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'cenId'       => 'CenId',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'status'      => 'Status',
        'vbrBgpPeers' => 'VbrBgpPeers',
        'vbrId'       => 'VbrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vbrBgpPeers) {
            $res['VbrBgpPeers'] = [];
            if (null !== $this->vbrBgpPeers && \is_array($this->vbrBgpPeers)) {
                $n = 0;
                foreach ($this->vbrBgpPeers as $item) {
                    $res['VbrBgpPeers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vbrInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VbrBgpPeers'])) {
            if (!empty($map['VbrBgpPeers'])) {
                $model->vbrBgpPeers = [];
                $n                  = 0;
                foreach ($map['VbrBgpPeers'] as $item) {
                    $model->vbrBgpPeers[$n++] = null !== $item ? vbrBgpPeers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}
