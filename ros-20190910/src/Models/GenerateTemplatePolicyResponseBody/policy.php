<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policy\statement;

class policy extends Model
{
    /**
     * @var statement[]
     */
    public $statement;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'statement' => 'Statement',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->statement)) {
            Model::validateArray($this->statement);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statement) {
            if (\is_array($this->statement)) {
                $res['Statement'] = [];
                $n1 = 0;
                foreach ($this->statement as $item1) {
                    $res['Statement'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Statement'])) {
            if (!empty($map['Statement'])) {
                $model->statement = [];
                $n1 = 0;
                foreach ($map['Statement'] as $item1) {
                    $model->statement[$n1++] = statement::fromMap($item1);
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
