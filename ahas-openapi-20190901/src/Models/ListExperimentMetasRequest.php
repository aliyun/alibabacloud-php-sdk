<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentMetasRequest extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'page'         => 'Page',
        'nameSpace'    => 'NameSpace',
        'size'         => 'Size',
        'ahasRegionId' => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentMetasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
