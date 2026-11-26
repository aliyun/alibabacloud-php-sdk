<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseAdminsResponseBody;

use AlibabaCloud\Dara\Model;

class effectiveApprovers extends Model
{
    /**
     * @var string[]
     */
    public $sourcePrincipalIds;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'sourcePrincipalIds' => 'sourcePrincipalIds',
        'userId' => 'userId',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->sourcePrincipalIds)) {
            Model::validateArray($this->sourcePrincipalIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourcePrincipalIds) {
            if (\is_array($this->sourcePrincipalIds)) {
                $res['sourcePrincipalIds'] = [];
                $n1 = 0;
                foreach ($this->sourcePrincipalIds as $item1) {
                    $res['sourcePrincipalIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['sourcePrincipalIds'])) {
            if (!empty($map['sourcePrincipalIds'])) {
                $model->sourcePrincipalIds = [];
                $n1 = 0;
                foreach ($map['sourcePrincipalIds'] as $item1) {
                    $model->sourcePrincipalIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
