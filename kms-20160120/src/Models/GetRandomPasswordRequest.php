<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetRandomPasswordRequest extends Model
{
    /**
     * @description The characters that are not included in the password to be generated.
     *
     * Valid values:
     *
     * ` Valid characters: 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ! \"#$%&\"()*+,-. /:;<=>? @[\] your_project_id} ~  `.
     *
     * This parameter is empty by default.
     * @example ABCabc
     *
     * @var string
     */
    public $excludeCharacters;

    /**
     * @description Specifies whether to exclude lowercase letters.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $excludeLowercase;

    /**
     * @description Specifies whether to exclude digits.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $excludeNumbers;

    /**
     * @description Specifies whether to exclude special characters.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $excludePunctuation;

    /**
     * @description Specifies whether to exclude uppercase letters.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $excludeUppercase;

    /**
     * @description The number of bytes that the password to be generated contains.
     *
     * Default value: 32
     * @example 32
     *
     * @var string
     */
    public $passwordLength;

    /**
     * @description Specifies whether to include all the preceding character types.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
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
