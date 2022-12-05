<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ListDesignRequest extends Model
{
    /**
     * @var string
     */
    public $designType;

    /**
     * @var string
     */
    public $designVersion;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'designType'    => 'DesignType',
        'designVersion' => 'DesignVersion',
        'extInfo'       => 'ExtInfo',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->designType) {
            $res['DesignType'] = $this->designType;
        }
        if (null !== $this->designVersion) {
            $res['DesignVersion'] = $this->designVersion;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDesignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesignType'])) {
            $model->designType = $map['DesignType'];
        }
        if (isset($map['DesignVersion'])) {
            $model->designVersion = $map['DesignVersion'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
