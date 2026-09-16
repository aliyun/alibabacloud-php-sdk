<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class DeleteSkillResponseBody extends Model
{
    /**
     * @var int
     */
    public $catalogRevision;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $skillId;
    protected $_name = [
        'catalogRevision' => 'CatalogRevision',
        'deleted' => 'Deleted',
        'requestId' => 'RequestId',
        'result' => 'Result',
        'skillId' => 'SkillId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogRevision) {
            $res['CatalogRevision'] = $this->catalogRevision;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
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
        if (isset($map['CatalogRevision'])) {
            $model->catalogRevision = $map['CatalogRevision'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        return $model;
    }
}
