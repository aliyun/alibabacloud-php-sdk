<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceRequest;

use AlibabaCloud\Dara\Model;

class resourceSpec extends Model
{
    /**
     * @var string
     */
    public $cu;

    /**
     * @var int
     */
    public $gpu;
    protected $_name = [
        'cu' => 'cu',
        'gpu' => 'gpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
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
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        return $model;
    }
}
