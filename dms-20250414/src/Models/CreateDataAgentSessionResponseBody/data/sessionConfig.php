<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class sessionConfig extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $customAgentStage;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string[]
     */
    public $mcpServerIds;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $reportPageWidth;

    /**
     * @var string
     */
    public $reportWaterMark;

    /**
     * @var string
     */
    public $userOssBucket;
    protected $_name = [
        'customAgentId' => 'CustomAgentId',
        'customAgentStage' => 'CustomAgentStage',
        'enableSearch' => 'EnableSearch',
        'encryptKey' => 'EncryptKey',
        'encryptType' => 'EncryptType',
        'language' => 'Language',
        'mcpServerIds' => 'McpServerIds',
        'mode' => 'Mode',
        'reportPageWidth' => 'ReportPageWidth',
        'reportWaterMark' => 'ReportWaterMark',
        'userOssBucket' => 'UserOssBucket',
    ];

    public function validate()
    {
        if (\is_array($this->mcpServerIds)) {
            Model::validateArray($this->mcpServerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->customAgentStage) {
            $res['CustomAgentStage'] = $this->customAgentStage;
        }

        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }

        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }

        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->mcpServerIds) {
            if (\is_array($this->mcpServerIds)) {
                $res['McpServerIds'] = [];
                $n1 = 0;
                foreach ($this->mcpServerIds as $item1) {
                    $res['McpServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->reportPageWidth) {
            $res['ReportPageWidth'] = $this->reportPageWidth;
        }

        if (null !== $this->reportWaterMark) {
            $res['ReportWaterMark'] = $this->reportWaterMark;
        }

        if (null !== $this->userOssBucket) {
            $res['UserOssBucket'] = $this->userOssBucket;
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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['CustomAgentStage'])) {
            $model->customAgentStage = $map['CustomAgentStage'];
        }

        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }

        if (isset($map['EncryptKey'])) {
            $model->encryptKey = $map['EncryptKey'];
        }

        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['McpServerIds'])) {
            if (!empty($map['McpServerIds'])) {
                $model->mcpServerIds = [];
                $n1 = 0;
                foreach ($map['McpServerIds'] as $item1) {
                    $model->mcpServerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ReportPageWidth'])) {
            $model->reportPageWidth = $map['ReportPageWidth'];
        }

        if (isset($map['ReportWaterMark'])) {
            $model->reportWaterMark = $map['ReportWaterMark'];
        }

        if (isset($map['UserOssBucket'])) {
            $model->userOssBucket = $map['UserOssBucket'];
        }

        return $model;
    }
}
