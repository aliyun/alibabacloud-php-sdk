<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobRequest\sourceResource;

class DeleteEventAnalysisJobRequest extends Model
{
    /**
     * @var sourceResource
     */
    public $sourceResource;
    protected $_name = [
        'sourceResource' => 'SourceResource',
    ];

    public function validate()
    {
        if (null !== $this->sourceResource) {
            $this->sourceResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceResource) {
            $res['SourceResource'] = null !== $this->sourceResource ? $this->sourceResource->toArray($noStream) : $this->sourceResource;
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
        if (isset($map['SourceResource'])) {
            $model->sourceResource = sourceResource::fromMap($map['SourceResource']);
        }

        return $model;
    }
}
