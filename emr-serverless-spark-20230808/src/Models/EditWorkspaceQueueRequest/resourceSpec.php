<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\EditWorkspaceQueueRequest;

use AlibabaCloud\Dara\Model;

class resourceSpec extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $maxCu;
    protected $_name = [
        'cu' => 'cu',
        'gpu' => 'gpu',
        'maxCu' => 'maxCu',
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

        if (null !== $this->maxCu) {
            $res['maxCu'] = $this->maxCu;
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

        if (isset($map['maxCu'])) {
            $model->maxCu = $map['maxCu'];
        }

        return $model;
    }
}
