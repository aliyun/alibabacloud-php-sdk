<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo\basicInfo;

use AlibabaCloud\Dara\Model;

class productName extends Model
{
    /**
     * @var string
     */
    public $cnName;
    /**
     * @var string
     */
    public $enName;
    protected $_name = [
        'cnName' => 'cnName',
        'enName' => 'enName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['cnName'] = $this->cnName;
        }

        if (null !== $this->enName) {
            $res['enName'] = $this->enName;
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
        if (isset($map['cnName'])) {
            $model->cnName = $map['cnName'];
        }

        if (isset($map['enName'])) {
            $model->enName = $map['enName'];
        }

        return $model;
    }
}
