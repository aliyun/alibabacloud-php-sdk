<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models\GetParseProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string[]
     */
    public $requiredEnvVars;

    /**
     * @var bool
     */
    public $requiresApiKey;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskKey;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'Description',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requiredEnvVars' => 'RequiredEnvVars',
        'requiresApiKey' => 'RequiresApiKey',
        'skillName' => 'SkillName',
        'slug' => 'Slug',
        'status' => 'Status',
        'taskKey' => 'TaskKey',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->requiredEnvVars)) {
            Model::validateArray($this->requiredEnvVars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requiredEnvVars) {
            if (\is_array($this->requiredEnvVars)) {
                $res['RequiredEnvVars'] = [];
                $n1 = 0;
                foreach ($this->requiredEnvVars as $item1) {
                    $res['RequiredEnvVars'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requiresApiKey) {
            $res['RequiresApiKey'] = $this->requiresApiKey;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RequiredEnvVars'])) {
            if (!empty($map['RequiredEnvVars'])) {
                $model->requiredEnvVars = [];
                $n1 = 0;
                foreach ($map['RequiredEnvVars'] as $item1) {
                    $model->requiredEnvVars[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequiresApiKey'])) {
            $model->requiresApiKey = $map['RequiresApiKey'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
