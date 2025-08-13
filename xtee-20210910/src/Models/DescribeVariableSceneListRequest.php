<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeVariableSceneListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $paging;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'bizType' => 'bizType',
        'configKey' => 'configKey',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'paging' => 'paging',
        'regId' => 'regId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->configKey) {
            $res['configKey'] = $this->configKey;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->paging) {
            $res['paging'] = $this->paging;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['configKey'])) {
            $model->configKey = $map['configKey'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['paging'])) {
            $model->paging = $map['paging'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
