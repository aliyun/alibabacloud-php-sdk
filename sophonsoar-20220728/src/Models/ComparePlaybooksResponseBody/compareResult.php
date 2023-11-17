<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponseBody;

use AlibabaCloud\Tea\Model;

class compareResult extends Model
{
    /**
     * @example The first version adds one node compared to the second version
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $new;

    /**
     * @example false
     *
     * @var bool
     */
    public $same;
    protected $_name = [
        'description' => 'Description',
        'new'         => 'New',
        'same'        => 'Same',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return compareResult
     */
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
