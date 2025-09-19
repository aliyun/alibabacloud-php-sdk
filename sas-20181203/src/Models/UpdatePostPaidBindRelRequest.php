<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdatePostPaidBindRelRequest\bindAction;

class UpdatePostPaidBindRelRequest extends Model
{
    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var int
     */
    public $autoBindVersion;

    /**
     * @var bindAction[]
     */
    public $bindAction;

    /**
     * @var bool
     */
    public $updateIfNecessary;
    protected $_name = [
        'autoBind' => 'AutoBind',
        'autoBindVersion' => 'AutoBindVersion',
        'bindAction' => 'BindAction',
        'updateIfNecessary' => 'UpdateIfNecessary',
    ];

    public function validate()
    {
        if (\is_array($this->bindAction)) {
            Model::validateArray($this->bindAction);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }

        if (null !== $this->autoBindVersion) {
            $res['AutoBindVersion'] = $this->autoBindVersion;
        }

        if (null !== $this->bindAction) {
            if (\is_array($this->bindAction)) {
                $res['BindAction'] = [];
                $n1 = 0;
                foreach ($this->bindAction as $item1) {
                    $res['BindAction'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateIfNecessary) {
            $res['UpdateIfNecessary'] = $this->updateIfNecessary;
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
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }

        if (isset($map['AutoBindVersion'])) {
            $model->autoBindVersion = $map['AutoBindVersion'];
        }

        if (isset($map['BindAction'])) {
            if (!empty($map['BindAction'])) {
                $model->bindAction = [];
                $n1 = 0;
                foreach ($map['BindAction'] as $item1) {
                    $model->bindAction[$n1] = bindAction::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateIfNecessary'])) {
            $model->updateIfNecessary = $map['UpdateIfNecessary'];
        }

        return $model;
    }
}
