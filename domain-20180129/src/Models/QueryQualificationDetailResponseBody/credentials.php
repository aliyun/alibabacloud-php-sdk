<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials\qualificationCredential;
use AlibabaCloud\Tea\Model;

class credentials extends Model
{
    /**
     * @var qualificationCredential[]
     */
    public $qualificationCredential;
    protected $_name = [
        'qualificationCredential' => 'QualificationCredential',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualificationCredential) {
            $res['QualificationCredential'] = [];
            if (null !== $this->qualificationCredential && \is_array($this->qualificationCredential)) {
                $n = 0;
                foreach ($this->qualificationCredential as $item) {
                    $res['QualificationCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualificationCredential'])) {
            if (!empty($map['QualificationCredential'])) {
                $model->qualificationCredential = [];
                $n                              = 0;
                foreach ($map['QualificationCredential'] as $item) {
                    $model->qualificationCredential[$n++] = null !== $item ? qualificationCredential::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
