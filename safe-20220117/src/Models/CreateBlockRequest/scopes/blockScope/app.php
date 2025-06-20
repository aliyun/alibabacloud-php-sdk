<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope;

use AlibabaCloud\Dara\Model;

class app extends Model
{
    /**
     * @var string[]
     */
    public $appName;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'appName' => 'AppName',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->appName)) {
            Model::validateArray($this->appName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            if (\is_array($this->appName)) {
                $res['AppName'] = [];
                $n1 = 0;
                foreach ($this->appName as $item1) {
                    $res['AppName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppName'])) {
            if (!empty($map['AppName'])) {
                $model->appName = [];
                $n1 = 0;
                foreach ($map['AppName'] as $item1) {
                    $model->appName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
