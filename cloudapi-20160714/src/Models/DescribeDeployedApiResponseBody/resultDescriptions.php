<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\resultDescriptions\resultDescription;

class resultDescriptions extends Model
{
    /**
     * @var resultDescription[]
     */
    public $resultDescription;
    protected $_name = [
        'resultDescription' => 'ResultDescription',
    ];

    public function validate()
    {
        if (\is_array($this->resultDescription)) {
            Model::validateArray($this->resultDescription);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultDescription) {
            if (\is_array($this->resultDescription)) {
                $res['ResultDescription'] = [];
                $n1 = 0;
                foreach ($this->resultDescription as $item1) {
                    $res['ResultDescription'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResultDescription'])) {
            if (!empty($map['ResultDescription'])) {
                $model->resultDescription = [];
                $n1 = 0;
                foreach ($map['ResultDescription'] as $item1) {
                    $model->resultDescription[$n1++] = resultDescription::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
