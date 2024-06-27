<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAuthScenePageListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $commonRuleCount;

    /**
     * @var int
     */
    public $customRuleCount;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $serverName;
    protected $_name = [
        'commonRuleCount' => 'commonRuleCount',
        'customRuleCount' => 'customRuleCount',
        'eventCode'       => 'eventCode',
        'sceneName'       => 'sceneName',
        'serverName'      => 'serverName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonRuleCount) {
            $res['commonRuleCount'] = $this->commonRuleCount;
        }
        if (null !== $this->customRuleCount) {
            $res['customRuleCount'] = $this->customRuleCount;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->serverName) {
            $res['serverName'] = $this->serverName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonRuleCount'])) {
            $model->commonRuleCount = $map['commonRuleCount'];
        }
        if (isset($map['customRuleCount'])) {
            $model->customRuleCount = $map['customRuleCount'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }
        if (isset($map['serverName'])) {
            $model->serverName = $map['serverName'];
        }

        return $model;
    }
}
