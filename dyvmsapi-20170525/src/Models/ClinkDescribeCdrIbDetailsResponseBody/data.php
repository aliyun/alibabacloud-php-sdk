<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbDetailsResponseBody\data\cdrIbDetails;

class data extends Model
{
    /**
     * @var cdrIbDetails[]
     */
    public $cdrIbDetails;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'cdrIbDetails' => 'CdrIbDetails',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cdrIbDetails)) {
            Model::validateArray($this->cdrIbDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrIbDetails) {
            if (\is_array($this->cdrIbDetails)) {
                $res['CdrIbDetails'] = [];
                $n1 = 0;
                foreach ($this->cdrIbDetails as $item1) {
                    $res['CdrIbDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CdrIbDetails'])) {
            if (!empty($map['CdrIbDetails'])) {
                $model->cdrIbDetails = [];
                $n1 = 0;
                foreach ($map['CdrIbDetails'] as $item1) {
                    $model->cdrIbDetails[$n1] = cdrIbDetails::fromMap($item1);
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
