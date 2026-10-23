<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateWorkflowTemplateResponseBody\steps;

class UpdateWorkflowTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $createdByUserId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectiveVersion;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $versionStatus;
    protected $_name = [
        'code' => 'code',
        'createdByUserId' => 'createdByUserId',
        'description' => 'description',
        'effectiveVersion' => 'effectiveVersion',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'message' => 'message',
        'name' => 'name',
        'requestId' => 'requestId',
        'steps' => 'steps',
        'templateId' => 'templateId',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
        'versionStatus' => 'versionStatus',
    ];

    public function validate()
    {
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createdByUserId) {
            $res['createdByUserId'] = $this->createdByUserId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectiveVersion) {
            $res['effectiveVersion'] = $this->effectiveVersion;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
        }

        if (null !== $this->versionStatus) {
            $res['versionStatus'] = $this->versionStatus;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['createdByUserId'])) {
            $model->createdByUserId = $map['createdByUserId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectiveVersion'])) {
            $model->effectiveVersion = $map['effectiveVersion'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        if (isset($map['versionStatus'])) {
            $model->versionStatus = $map['versionStatus'];
        }

        return $model;
    }
}
