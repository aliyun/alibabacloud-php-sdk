<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionRequest\confOptions;

class CreateRoutineWithAssetsCodeVersionRequest extends Model
{
    /**
     * @var int
     */
    public $buildId;

    /**
     * @var string
     */
    public $codeDescription;

    /**
     * @var confOptions
     */
    public $confOptions;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'buildId' => 'BuildId',
        'codeDescription' => 'CodeDescription',
        'confOptions' => 'ConfOptions',
        'extraInfo' => 'ExtraInfo',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->confOptions) {
            $this->confOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }

        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }

        if (null !== $this->confOptions) {
            $res['ConfOptions'] = null !== $this->confOptions ? $this->confOptions->toArray($noStream) : $this->confOptions;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }

        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }

        if (isset($map['ConfOptions'])) {
            $model->confOptions = confOptions::fromMap($map['ConfOptions']);
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
