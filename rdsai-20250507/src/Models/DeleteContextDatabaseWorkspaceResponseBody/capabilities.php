<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var string[]
     */
    public $executableActions;
    protected $_name = [
        'executableActions' => 'ExecutableActions',
    ];

    public function validate()
    {
        if (\is_array($this->executableActions)) {
            Model::validateArray($this->executableActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executableActions) {
            if (\is_array($this->executableActions)) {
                $res['ExecutableActions'] = [];
                $n1 = 0;
                foreach ($this->executableActions as $item1) {
                    $res['ExecutableActions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExecutableActions'])) {
            if (!empty($map['ExecutableActions'])) {
                $model->executableActions = [];
                $n1 = 0;
                foreach ($map['ExecutableActions'] as $item1) {
                    $model->executableActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
