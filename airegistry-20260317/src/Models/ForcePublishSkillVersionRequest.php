<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class ForcePublishSkillVersionRequest extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillVersion;

    /**
     * @var bool
     */
    public $updateLatestLabel;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'skillName' => 'SkillName',
        'skillVersion' => 'SkillVersion',
        'updateLatestLabel' => 'UpdateLatestLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->updateLatestLabel) {
            $res['UpdateLatestLabel'] = $this->updateLatestLabel;
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['UpdateLatestLabel'])) {
            $model->updateLatestLabel = $map['UpdateLatestLabel'];
        }

        return $model;
    }
}
