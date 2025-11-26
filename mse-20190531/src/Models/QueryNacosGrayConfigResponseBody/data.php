<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryNacosGrayConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $grayRule;

    /**
     * @var string
     */
    public $grayRuleName;

    /**
     * @var string
     */
    public $grayRulePriority;

    /**
     * @var string
     */
    public $grayType;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $md5;
    protected $_name = [
        'appName' => 'AppName',
        'content' => 'Content',
        'dataId' => 'DataId',
        'grayRule' => 'GrayRule',
        'grayRuleName' => 'GrayRuleName',
        'grayRulePriority' => 'GrayRulePriority',
        'grayType' => 'GrayType',
        'group' => 'Group',
        'lastModified' => 'LastModified',
        'md5' => 'Md5',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->grayRule) {
            $res['GrayRule'] = $this->grayRule;
        }

        if (null !== $this->grayRuleName) {
            $res['GrayRuleName'] = $this->grayRuleName;
        }

        if (null !== $this->grayRulePriority) {
            $res['GrayRulePriority'] = $this->grayRulePriority;
        }

        if (null !== $this->grayType) {
            $res['GrayType'] = $this->grayType;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['GrayRule'])) {
            $model->grayRule = $map['GrayRule'];
        }

        if (isset($map['GrayRuleName'])) {
            $model->grayRuleName = $map['GrayRuleName'];
        }

        if (isset($map['GrayRulePriority'])) {
            $model->grayRulePriority = $map['GrayRulePriority'];
        }

        if (isset($map['GrayType'])) {
            $model->grayType = $map['GrayType'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        return $model;
    }
}
