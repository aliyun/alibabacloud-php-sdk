<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vbrInfos\vbrBgpPeers;

class vbrInfos extends Model
{
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $status;
    /**
     * @var vbrBgpPeers[]
     */
    public $vbrBgpPeers;
    /**
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
        if (\is_array($this->vbrBgpPeers)) {
            Model::validateArray($this->vbrBgpPeers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vbrBgpPeers)) {
                $res['VbrBgpPeers'] = [];
                $n1                 = 0;
                foreach ($this->vbrBgpPeers as $item1) {
                    $res['VbrBgpPeers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                 = 0;
                foreach ($map['VbrBgpPeers'] as $item1) {
                    $model->vbrBgpPeers[$n1++] = vbrBgpPeers::fromMap($item1);
                }
            }
        }

        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}
