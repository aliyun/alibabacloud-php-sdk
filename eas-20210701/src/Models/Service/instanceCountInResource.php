<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\Service;

use AlibabaCloud\Dara\Model;

class instanceCountInResource extends Model
{
    /**
     * @var int
     */
    public $dedicated;

    /**
     * @var int
     */
    public $public;

    /**
     * @var int
     */
    public $quota;
    protected $_name = [
        'dedicated' => 'Dedicated',
        'public' => 'Public',
        'quota' => 'Quota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicated) {
            $res['Dedicated'] = $this->dedicated;
        }

        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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
        if (isset($map['Dedicated'])) {
            $model->dedicated = $map['Dedicated'];
        }

        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}
