<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateContainerScanTaskByAppNameRequest extends Model
{
    /**
     * @var string
     */
    public $appNames;
    /**
     * @var string
     */
    public $clusterId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
