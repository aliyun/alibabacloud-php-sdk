<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDetailResponseBody\data\cveBeans;

class data extends Model
{
    /**
     * @var cveBeans[]
     */
    public $cveBeans;

    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'cveBeans' => 'CveBeans',
        'payload' => 'Payload',
    ];

    public function validate()
    {
        if (\is_array($this->cveBeans)) {
            Model::validateArray($this->cveBeans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveBeans) {
            if (\is_array($this->cveBeans)) {
                $res['CveBeans'] = [];
                $n1 = 0;
                foreach ($this->cveBeans as $item1) {
                    $res['CveBeans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
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
        if (isset($map['CveBeans'])) {
            if (!empty($map['CveBeans'])) {
                $model->cveBeans = [];
                $n1 = 0;
                foreach ($map['CveBeans'] as $item1) {
                    $model->cveBeans[$n1] = cveBeans::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        return $model;
    }
}
