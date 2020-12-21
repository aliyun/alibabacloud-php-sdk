<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsResponseBody;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsResponseBody\data\optionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var optionList[]
     */
    public $optionList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'key'        => 'Key',
        'optionList' => 'OptionList',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->optionList) {
            $res['OptionList'] = [];
            if (null !== $this->optionList && \is_array($this->optionList)) {
                $n = 0;
                foreach ($this->optionList as $item) {
                    $res['OptionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OptionList'])) {
            if (!empty($map['OptionList'])) {
                $model->optionList = [];
                $n                 = 0;
                foreach ($map['OptionList'] as $item) {
                    $model->optionList[$n++] = null !== $item ? optionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
