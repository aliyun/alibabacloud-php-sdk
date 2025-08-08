<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterCatalogResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $missing;

    /**
     * @var string[]
     */
    public $removed;

    /**
     * @var string[]
     */
    public $updated;
    protected $_name = [
        'missing' => 'missing',
        'removed' => 'removed',
        'updated' => 'updated',
    ];

    public function validate()
    {
        if (\is_array($this->missing)) {
            Model::validateArray($this->missing);
        }
        if (\is_array($this->removed)) {
            Model::validateArray($this->removed);
        }
        if (\is_array($this->updated)) {
            Model::validateArray($this->updated);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->missing) {
            if (\is_array($this->missing)) {
                $res['missing'] = [];
                $n1 = 0;
                foreach ($this->missing as $item1) {
                    $res['missing'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removed) {
            if (\is_array($this->removed)) {
                $res['removed'] = [];
                $n1 = 0;
                foreach ($this->removed as $item1) {
                    $res['removed'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updated) {
            if (\is_array($this->updated)) {
                $res['updated'] = [];
                $n1 = 0;
                foreach ($this->updated as $item1) {
                    $res['updated'][$n1] = $item1;
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
        if (isset($map['missing'])) {
            if (!empty($map['missing'])) {
                $model->missing = [];
                $n1 = 0;
                foreach ($map['missing'] as $item1) {
                    $model->missing[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['removed'])) {
            if (!empty($map['removed'])) {
                $model->removed = [];
                $n1 = 0;
                foreach ($map['removed'] as $item1) {
                    $model->removed[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updated'])) {
            if (!empty($map['updated'])) {
                $model->updated = [];
                $n1 = 0;
                foreach ($map['updated'] as $item1) {
                    $model->updated[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
