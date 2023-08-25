<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates the position where the results are truncated. When a value of `true` is returned for the `Truncated` parameter, this parameter is present and contains the value to use for the Marker parameter in a subsequent call.
     *
     * @example 0573e74fd1ccb01739993a691e876074db6e1b6ad79f54115f0e98528432ba6a523cfec5780ade5189299cc3396f6ff7
     *
     * @var string
     */
    public $marker;

    /**
     * @description The permissions.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description Indicates whether the results are truncated. If the results are truncated, a value of `true` is returned. In this case, you must call this operation again to obtain all the results until a value of `false` is returned for this parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $truncated;
    protected $_name = [
        'marker'    => 'Marker',
        'result'    => 'Result',
        'truncated' => 'Truncated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->truncated) {
            $res['Truncated'] = $this->truncated;
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
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Truncated'])) {
            $model->truncated = $map['Truncated'];
        }

        return $model;
    }
}
