<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ExportDesktopGroupInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 24E05D3E-08F4-551E-B1F0-F6D84EE0BCCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The URL from which you can download the exported cloud computer pools. The details of the cloud computer pools include:
     *
     *   IDs and names of the cloud computer pools
     *   IDs and names of the office networks
     *   Cloud computer pool templates
     *   Number of CPU cores and memory size
     *   System disks and data disks
     *   Names of security policies
     *   Number of current authorized users
     *   Billing methods
     *   The time when the cloud computer pools were created
     *   The time when the cloud computer pools expire
     *
     * @example https://cn-hangzhou-servicemanager.oss-cn-hangzhou.aliyuncs.com/A0_DESKTOP/EDS_CloudDesktopGroups_202203********_xBjqdCT***.xlsx?*********
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId' => 'RequestId',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDesktopGroupInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
