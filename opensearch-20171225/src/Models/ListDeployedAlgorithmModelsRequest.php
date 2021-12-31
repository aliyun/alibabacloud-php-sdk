<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListDeployedAlgorithmModelsRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var bool
     */
    public $inServiceOnly;
    protected $_name = [
        'algorithmType' => 'algorithmType',
        'inServiceOnly' => 'inServiceOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['algorithmType'] = $this->algorithmType;
        }
        if (null !== $this->inServiceOnly) {
            $res['inServiceOnly'] = $this->inServiceOnly;
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
        if (isset($map['algorithmType'])) {
            $model->algorithmType = $map['algorithmType'];
        }
        if (isset($map['inServiceOnly'])) {
            $model->inServiceOnly = $map['inServiceOnly'];
        }

        return $model;
    }
}
