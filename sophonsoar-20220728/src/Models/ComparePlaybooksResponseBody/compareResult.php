<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponseBody;

use AlibabaCloud\Dara\Model;

class compareResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $new;

    /**
     * @var bool
     */
    public $same;
    protected $_name = [
        'description' => 'Description',
        'new' => 'New',
        'same' => 'Same',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->new) {
            $res['New'] = $this->new;
        }

        if (null !== $this->same) {
            $res['Same'] = $this->same;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['New'])) {
            $model->new = $map['New'];
        }

        if (isset($map['Same'])) {
            $model->same = $map['Same'];
        }

        return $model;
    }
}
