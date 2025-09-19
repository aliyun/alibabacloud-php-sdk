<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody\data\checkDetails;

class data extends Model
{
    /**
     * @var checkDetails[]
     */
    public $checkDetails;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $checkTypeDisName;
    protected $_name = [
        'checkDetails' => 'CheckDetails',
        'checkType' => 'CheckType',
        'checkTypeDisName' => 'CheckTypeDisName',
    ];

    public function validate()
    {
        if (\is_array($this->checkDetails)) {
            Model::validateArray($this->checkDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkDetails) {
            if (\is_array($this->checkDetails)) {
                $res['CheckDetails'] = [];
                $n1 = 0;
                foreach ($this->checkDetails as $item1) {
                    $res['CheckDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->checkTypeDisName) {
            $res['CheckTypeDisName'] = $this->checkTypeDisName;
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
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n1 = 0;
                foreach ($map['CheckDetails'] as $item1) {
                    $model->checkDetails[$n1] = checkDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['CheckTypeDisName'])) {
            $model->checkTypeDisName = $map['CheckTypeDisName'];
        }

        return $model;
    }
}
