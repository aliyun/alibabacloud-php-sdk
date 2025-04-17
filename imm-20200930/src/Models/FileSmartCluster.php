<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class FileSmartCluster extends Model
{
    /**
     * @var float
     */
    public $similarity;

    /**
     * @var string
     */
    public $smartClusterId;
    protected $_name = [
        'similarity' => 'Similarity',
        'smartClusterId' => 'SmartClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }

        if (null !== $this->smartClusterId) {
            $res['SmartClusterId'] = $this->smartClusterId;
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
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        if (isset($map['SmartClusterId'])) {
            $model->smartClusterId = $map['SmartClusterId'];
        }

        return $model;
    }
}
