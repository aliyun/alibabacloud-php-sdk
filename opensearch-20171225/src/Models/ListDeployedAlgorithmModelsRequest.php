<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListDeployedAlgorithmModelsRequest extends Model
{
    /**
     * @var bool
     */
    public $inServiceOnly;

    /**
     * @var string
     */
    public $algorithmType;
    protected $_name = [
        'inServiceOnly' => 'inServiceOnly',
        'algorithmType' => 'algorithmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inServiceOnly) {
            $res['inServiceOnly'] = $this->inServiceOnly;
        }
        if (null !== $this->algorithmType) {
            $res['algorithmType'] = $this->algorithmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeployedAlgorithmModelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inServiceOnly'])) {
            $model->inServiceOnly = $map['inServiceOnly'];
        }
        if (isset($map['algorithmType'])) {
            $model->algorithmType = $map['algorithmType'];
        }

        return $model;
    }
}
