<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateContainerScanTaskByAppNameRequest extends Model
{
    /**
     * @description The name of the container application.
     *
     * @example app-centos-01
     *
     * @var string
     */
    public $appNames;

    /**
     * @description The cluster ID.
     *
     * @example cfb7a55a81f7246b5ac18845ea79a****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The language of the content within the request and response.
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'appNames'  => 'AppNames',
        'clusterId' => 'ClusterId',
        'lang'      => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appNames) {
            $res['AppNames'] = $this->appNames;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerScanTaskByAppNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppNames'])) {
            $model->appNames = $map['AppNames'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
