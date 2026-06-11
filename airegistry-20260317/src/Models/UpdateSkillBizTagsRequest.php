<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UpdateSkillBizTagsRequest extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'bizTags' => 'BizTags',
        'namespaceId' => 'NamespaceId',
        'skillName' => 'SkillName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            $res['BizTags'] = $this->bizTags;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
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
        if (isset($map['BizTags'])) {
            $model->bizTags = $map['BizTags'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        return $model;
    }
}
