<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data\internet;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data\intranet;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the SSL certificate issued by Alibaba Cloud.
     *
     * @var internet[]
     */
    public $internet;

    /**
     * @description The ID of the Internet-facing SLB instance.
     *
     * @example 59.74.\*\*.**
     *
     * @var string
     */
    public $internetIp;

    /**
     * @var bool
     */
    public $internetSlbExpired;

    /**
     * @description Configurations of Internet-facing SLB instances.
     *
     * @example lb-uf6xc7wybefehnv45****
     *
     * @var string
     */
    public $internetSlbId;

    /**
     * @description The ID of the SSL certificate issued by Alibaba Cloud.
     *
     * @var intranet[]
     */
    public $intranet;

    /**
     * @description The error code.
     *
     *   The **ErrorCode** parameter is not returned when the request succeeds.
     *   The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     *
     * @example 192.168.0.0
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @var bool
     */
    public $intranetSlbExpired;

    /**
     * @description The IP address of the internal-facing SLB instance.
     *
     * @example lb-uf6xc7wybefehnv45****
     *
     * @var string
     */
    public $intranetSlbId;
    protected $_name = [
        'internet'           => 'Internet',
        'internetIp'         => 'InternetIp',
        'internetSlbExpired' => 'InternetSlbExpired',
        'internetSlbId'      => 'InternetSlbId',
        'intranet'           => 'Intranet',
        'intranetIp'         => 'IntranetIp',
        'intranetSlbExpired' => 'IntranetSlbExpired',
        'intranetSlbId'      => 'IntranetSlbId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internet) {
            $res['Internet'] = [];
            if (null !== $this->internet && \is_array($this->internet)) {
                $n = 0;
                foreach ($this->internet as $item) {
                    $res['Internet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->internetSlbExpired) {
            $res['InternetSlbExpired'] = $this->internetSlbExpired;
        }
        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }
        if (null !== $this->intranet) {
            $res['Intranet'] = [];
            if (null !== $this->intranet && \is_array($this->intranet)) {
                $n = 0;
                foreach ($this->intranet as $item) {
                    $res['Intranet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->intranetSlbExpired) {
            $res['IntranetSlbExpired'] = $this->intranetSlbExpired;
        }
        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Internet'])) {
            if (!empty($map['Internet'])) {
                $model->internet = [];
                $n               = 0;
                foreach ($map['Internet'] as $item) {
                    $model->internet[$n++] = null !== $item ? internet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InternetSlbExpired'])) {
            $model->internetSlbExpired = $map['InternetSlbExpired'];
        }
        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }
        if (isset($map['Intranet'])) {
            if (!empty($map['Intranet'])) {
                $model->intranet = [];
                $n               = 0;
                foreach ($map['Intranet'] as $item) {
                    $model->intranet[$n++] = null !== $item ? intranet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['IntranetSlbExpired'])) {
            $model->intranetSlbExpired = $map['IntranetSlbExpired'];
        }
        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }

        return $model;
    }
}
