<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class knowledgeApplicationSpec extends Model
{
    /**
     * @var string
     */
    public $dashboardPassword;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var string
     */
    public $polarAIEmbedderInstanceId;

    /**
     * @var string
     */
    public $polarAILlmInstanceId;

    /**
     * @var string
     */
    public $polarAIRerankerInstanceId;

    /**
     * @var string
     */
    public $polarAIVlInstanceId;
    protected $_name = [
        'dashboardPassword' => 'DashboardPassword',
        'dbPassword' => 'DbPassword',
        'llmModel' => 'LlmModel',
        'polarAIEmbedderInstanceId' => 'PolarAIEmbedderInstanceId',
        'polarAILlmInstanceId' => 'PolarAILlmInstanceId',
        'polarAIRerankerInstanceId' => 'PolarAIRerankerInstanceId',
        'polarAIVlInstanceId' => 'PolarAIVlInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardPassword) {
            $res['DashboardPassword'] = $this->dashboardPassword;
        }

        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->polarAIEmbedderInstanceId) {
            $res['PolarAIEmbedderInstanceId'] = $this->polarAIEmbedderInstanceId;
        }

        if (null !== $this->polarAILlmInstanceId) {
            $res['PolarAILlmInstanceId'] = $this->polarAILlmInstanceId;
        }

        if (null !== $this->polarAIRerankerInstanceId) {
            $res['PolarAIRerankerInstanceId'] = $this->polarAIRerankerInstanceId;
        }

        if (null !== $this->polarAIVlInstanceId) {
            $res['PolarAIVlInstanceId'] = $this->polarAIVlInstanceId;
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
        if (isset($map['DashboardPassword'])) {
            $model->dashboardPassword = $map['DashboardPassword'];
        }

        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['PolarAIEmbedderInstanceId'])) {
            $model->polarAIEmbedderInstanceId = $map['PolarAIEmbedderInstanceId'];
        }

        if (isset($map['PolarAILlmInstanceId'])) {
            $model->polarAILlmInstanceId = $map['PolarAILlmInstanceId'];
        }

        if (isset($map['PolarAIRerankerInstanceId'])) {
            $model->polarAIRerankerInstanceId = $map['PolarAIRerankerInstanceId'];
        }

        if (isset($map['PolarAIVlInstanceId'])) {
            $model->polarAIVlInstanceId = $map['PolarAIVlInstanceId'];
        }

        return $model;
    }
}
