<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest;

use AlibabaCloud\Tea\Model;

class documentHandleConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $disableHandleMultimodalMedia;
    protected $_name = [
        'disableHandleMultimodalMedia' => 'DisableHandleMultimodalMedia',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableHandleMultimodalMedia) {
            $res['DisableHandleMultimodalMedia'] = $this->disableHandleMultimodalMedia;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentHandleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableHandleMultimodalMedia'])) {
            $model->disableHandleMultimodalMedia = $map['DisableHandleMultimodalMedia'];
        }

        return $model;
    }
}
