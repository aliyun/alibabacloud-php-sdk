<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies;

use AlibabaCloud\Tea\Model;

class metricCheckRule extends Model
{
    /**
     * @var string[]
     */
    public $promQL;
    protected $_name = [
        'promQL' => 'promQL',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->promQL) {
            $res['promQL'] = $this->promQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricCheckRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['promQL'])) {
            if (!empty($map['promQL'])) {
                $model->promQL = $map['promQL'];
            }
        }

        return $model;
    }
}
