<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetRandomPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $excludeCharacters;

    /**
     * @var string
     */
    public $excludeLowercase;

    /**
     * @var string
     */
    public $excludeNumbers;

    /**
     * @var string
     */
    public $excludePunctuation;

    /**
     * @var string
     */
    public $excludeUppercase;

    /**
     * @var string
     */
    public $passwordLength;

    /**
     * @var string
     */
    public $requireEachIncludedType;
    protected $_name = [
        'excludeCharacters'       => 'ExcludeCharacters',
        'excludeLowercase'        => 'ExcludeLowercase',
        'excludeNumbers'          => 'ExcludeNumbers',
        'excludePunctuation'      => 'ExcludePunctuation',
        'excludeUppercase'        => 'ExcludeUppercase',
        'passwordLength'          => 'PasswordLength',
        'requireEachIncludedType' => 'RequireEachIncludedType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeCharacters) {
            $res['ExcludeCharacters'] = $this->excludeCharacters;
        }
        if (null !== $this->excludeLowercase) {
            $res['ExcludeLowercase'] = $this->excludeLowercase;
        }
        if (null !== $this->excludeNumbers) {
            $res['ExcludeNumbers'] = $this->excludeNumbers;
        }
        if (null !== $this->excludePunctuation) {
            $res['ExcludePunctuation'] = $this->excludePunctuation;
        }
        if (null !== $this->excludeUppercase) {
            $res['ExcludeUppercase'] = $this->excludeUppercase;
        }
        if (null !== $this->passwordLength) {
            $res['PasswordLength'] = $this->passwordLength;
        }
        if (null !== $this->requireEachIncludedType) {
            $res['RequireEachIncludedType'] = $this->requireEachIncludedType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRandomPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeCharacters'])) {
            $model->excludeCharacters = $map['ExcludeCharacters'];
        }
        if (isset($map['ExcludeLowercase'])) {
            $model->excludeLowercase = $map['ExcludeLowercase'];
        }
        if (isset($map['ExcludeNumbers'])) {
            $model->excludeNumbers = $map['ExcludeNumbers'];
        }
        if (isset($map['ExcludePunctuation'])) {
            $model->excludePunctuation = $map['ExcludePunctuation'];
        }
        if (isset($map['ExcludeUppercase'])) {
            $model->excludeUppercase = $map['ExcludeUppercase'];
        }
        if (isset($map['PasswordLength'])) {
            $model->passwordLength = $map['PasswordLength'];
        }
        if (isset($map['RequireEachIncludedType'])) {
            $model->requireEachIncludedType = $map['RequireEachIncludedType'];
        }

        return $model;
    }
}
