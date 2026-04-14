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
    protected $_name = [
        'dashboardPassword' => 'DashboardPassword',
        'dbPassword' => 'DbPassword',
        'llmModel' => 'LlmModel',
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

        return $model;
    }
}
