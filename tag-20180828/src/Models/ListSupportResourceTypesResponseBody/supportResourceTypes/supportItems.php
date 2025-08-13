<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes;

use AlibabaCloud\Dara\Model;

class supportItems extends Model
{
    /**
     * @var bool
     */
    public $support;

    /**
     * @var string
     */
    public $supportCode;

    /**
     * @var string[][]
     */
    public $supportDetails;
    protected $_name = [
        'support' => 'Support',
        'supportCode' => 'SupportCode',
        'supportDetails' => 'SupportDetails',
    ];

    public function validate()
    {
        if (\is_array($this->supportDetails)) {
            Model::validateArray($this->supportDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }

        if (null !== $this->supportCode) {
            $res['SupportCode'] = $this->supportCode;
        }

        if (null !== $this->supportDetails) {
            if (\is_array($this->supportDetails)) {
                $res['SupportDetails'] = [];
                $n1 = 0;
                foreach ($this->supportDetails as $item1) {
                    if (\is_array($item1)) {
                        $res['SupportDetails'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['SupportDetails'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        if (isset($map['SupportCode'])) {
            $model->supportCode = $map['SupportCode'];
        }

        if (isset($map['SupportDetails'])) {
            if (!empty($map['SupportDetails'])) {
                $model->supportDetails = [];
                $n1 = 0;
                foreach ($map['SupportDetails'] as $item1) {
                    if (!empty($item1)) {
                        $model->supportDetails[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->supportDetails[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
