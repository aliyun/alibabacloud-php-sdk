<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class AddApListToApgroupRequest extends Model
{
    /**
     * @var string
     */
    public $apGroupId;

    /**
     * @var mixed[]
     */
    public $apMacList;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'apGroupId' => 'ApGroupId',
        'apMacList' => 'ApMacList',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
    ];

    public function validate()
    {
        if (\is_array($this->apMacList)) {
            Model::validateArray($this->apMacList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apGroupId) {
            $res['ApGroupId'] = $this->apGroupId;
        }

        if (null !== $this->apMacList) {
            if (\is_array($this->apMacList)) {
                $res['ApMacList'] = [];
                foreach ($this->apMacList as $key1 => $value1) {
                    $res['ApMacList'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
        if (isset($map['ApGroupId'])) {
            $model->apGroupId = $map['ApGroupId'];
        }

        if (isset($map['ApMacList'])) {
            if (!empty($map['ApMacList'])) {
                $model->apMacList = [];
                foreach ($map['ApMacList'] as $key1 => $value1) {
                    $model->apMacList[$key1] = $value1;
                }
            }
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
