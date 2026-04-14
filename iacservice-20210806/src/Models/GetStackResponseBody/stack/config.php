<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackResponseBody\stack;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $componentContent;

    /**
     * @var string
     */
    public $deploymentContent;
    protected $_name = [
        'componentContent' => 'componentContent',
        'deploymentContent' => 'deploymentContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentContent) {
            $res['componentContent'] = $this->componentContent;
        }

        if (null !== $this->deploymentContent) {
            $res['deploymentContent'] = $this->deploymentContent;
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
        if (isset($map['componentContent'])) {
            $model->componentContent = $map['componentContent'];
        }

        if (isset($map['deploymentContent'])) {
            $model->deploymentContent = $map['deploymentContent'];
        }

        return $model;
    }
}
