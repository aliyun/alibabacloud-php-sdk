<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option\appProperties;

class option extends Model
{
    /**
     * @var appProperties[]
     */
    public $appProperties;

    /**
     * @var string
     */
    public $conflictStrategy;
    protected $_name = [
        'appProperties' => 'AppProperties',
        'conflictStrategy' => 'ConflictStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->appProperties)) {
            Model::validateArray($this->appProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appProperties) {
            if (\is_array($this->appProperties)) {
                $res['AppProperties'] = [];
                $n1 = 0;
                foreach ($this->appProperties as $item1) {
                    $res['AppProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conflictStrategy) {
            $res['ConflictStrategy'] = $this->conflictStrategy;
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
        if (isset($map['AppProperties'])) {
            if (!empty($map['AppProperties'])) {
                $model->appProperties = [];
                $n1 = 0;
                foreach ($map['AppProperties'] as $item1) {
                    $model->appProperties[$n1] = appProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConflictStrategy'])) {
            $model->conflictStrategy = $map['ConflictStrategy'];
        }

        return $model;
    }
}
