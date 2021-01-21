<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponse;

use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponse\policy\statement;
use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var statement[]
     */
    public $statement;
    protected $_name = [
        'version'   => 'Version',
        'statement' => 'Statement',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('statement', $this->statement, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->statement) {
            $res['Statement'] = [];
            if (null !== $this->statement && \is_array($this->statement)) {
                $n = 0;
                foreach ($this->statement as $item) {
                    $res['Statement'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Statement'])) {
            if (!empty($map['Statement'])) {
                $model->statement = [];
                $n                = 0;
                foreach ($map['Statement'] as $item) {
                    $model->statement[$n++] = null !== $item ? statement::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
