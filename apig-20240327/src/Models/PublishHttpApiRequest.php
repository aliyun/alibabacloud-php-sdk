<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\PublishHttpApiRequest\environment;
use AlibabaCloud\Tea\Model;

class PublishHttpApiRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowOverwrite;

    /**
     * @var string
     */
    public $description;

    /**
     * @var environment
     */
    public $environment;

    /**
     * @example apr-xxx
     *
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'allowOverwrite' => 'allowOverwrite',
        'description'    => 'description',
        'environment'    => 'environment',
        'revisionId'     => 'revisionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowOverwrite) {
            $res['allowOverwrite'] = $this->allowOverwrite;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toMap() : null;
        }
        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowOverwrite'])) {
            $model->allowOverwrite = $map['allowOverwrite'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }
        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
        }

        return $model;
    }
}
