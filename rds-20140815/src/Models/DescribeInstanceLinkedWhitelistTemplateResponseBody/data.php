<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateResponseBody\data\templates;

class data extends Model
{
    /**
     * @var string
     */
    public $insName;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'insName' => 'InsName',
        'templates' => 'Templates',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1++] = templates::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
