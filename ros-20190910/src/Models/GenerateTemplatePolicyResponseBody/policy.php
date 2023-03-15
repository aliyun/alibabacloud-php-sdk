<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policy\statement;
use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description The statements that are contained in the policy.
     *
     * @var statement[]
     */
    public $statement;

    /**
     * @description The version number.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'statement' => 'Statement',
        'version'   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statement) {
            $res['Statement'] = [];
            if (null !== $this->statement && \is_array($this->statement)) {
                $n = 0;
                foreach ($this->statement as $item) {
                    $res['Statement'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Statement'])) {
            if (!empty($map['Statement'])) {
                $model->statement = [];
                $n                = 0;
                foreach ($map['Statement'] as $item) {
                    $model->statement[$n++] = null !== $item ? statement::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
