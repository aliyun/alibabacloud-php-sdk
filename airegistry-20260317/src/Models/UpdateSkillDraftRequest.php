<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UpdateSkillDraftRequest extends Model
{
    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $skillCard;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'commitMsg' => 'CommitMsg',
        'namespaceId' => 'NamespaceId',
        'skillCard' => 'SkillCard',
        'skillName' => 'SkillName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitMsg) {
            $res['CommitMsg'] = $this->commitMsg;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->skillCard) {
            $res['SkillCard'] = $this->skillCard;
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
        if (isset($map['CommitMsg'])) {
            $model->commitMsg = $map['CommitMsg'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SkillCard'])) {
            $model->skillCard = $map['SkillCard'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        return $model;
    }
}
