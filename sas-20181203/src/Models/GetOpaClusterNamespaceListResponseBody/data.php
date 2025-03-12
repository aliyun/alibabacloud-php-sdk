<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaClusterNamespaceListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the namespace.
     *
     * @example testNameSpace
     *
     * @var string
     */
    public $nameSpaceName;
    protected $_name = [
        'nameSpaceName' => 'NameSpaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameSpaceName) {
            $res['NameSpaceName'] = $this->nameSpaceName;
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
        if (isset($map['NameSpaceName'])) {
            $model->nameSpaceName = $map['NameSpaceName'];
        }

        return $model;
    }
}
