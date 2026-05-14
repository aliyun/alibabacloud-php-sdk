<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCdrObDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCdrObDetailsResponseBody\data\cdrObDetails;

class data extends Model
{
    /**
     * @var cdrObDetails[]
     */
    public $cdrObDetails;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'cdrObDetails' => 'CdrObDetails',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cdrObDetails)) {
            Model::validateArray($this->cdrObDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrObDetails) {
            if (\is_array($this->cdrObDetails)) {
                $res['CdrObDetails'] = [];
                $n1 = 0;
                foreach ($this->cdrObDetails as $item1) {
                    $res['CdrObDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['CdrObDetails'])) {
            if (!empty($map['CdrObDetails'])) {
                $model->cdrObDetails = [];
                $n1 = 0;
                foreach ($map['CdrObDetails'] as $item1) {
                    $model->cdrObDetails[$n1] = cdrObDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
