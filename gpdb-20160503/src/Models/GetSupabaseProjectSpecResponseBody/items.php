<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectSpecResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $free;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'free' => 'Free',
        'spec' => 'Spec',
        'visible' => 'Visible',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->free) {
            $res['Free'] = $this->free;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
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
        if (isset($map['Free'])) {
            $model->free = $map['Free'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}
