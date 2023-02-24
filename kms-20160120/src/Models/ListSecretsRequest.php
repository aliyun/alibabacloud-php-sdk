<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListSecretsRequest extends Model
{
    /**
     * @description Specifies whether to return the resource tags of the secret. Valid values:
     *
     *   true: returns the resource tags.
     *   false: does not return the resource tags. This is the default value.
     *
     * @example false
     *
     * @var string
     */
    public $fetchTags;

    /**
     * @description The secret filter. The filter consists of one or more key-value pairs. You can specify one key-value pair or leave this parameter empty. If you use one tag key or tag value to filter resources, up to 4,000 resources can be queried. If you want to query more than 4,000 resources, call the [ListResourceTags](~~120090~~) operation.
     *
     *   Key
     *
     *   Description: the property that you want to filter.
     *
     *   Type: string.
     *
     *   Valid values:
     *
     *   SecretName: the secret name.
     *   Description: the description of the secret.
     *   TagKey: the tag key.
     *   TagValue: the tag value.
     *
     *   Values
     *
     *   Description: the value to be included after filtering.
     *
     *   Type: string.
     *
     *   Length: 0 to 10.
     *
     *   Valid values:
     *
     *   If the Key field is set to SecretName, the value must be 1 to 192 characters in length and can contain letters, digits, and special characters `_ / + = . @ -`.
     *   If the Key field is set to Description, the value must be 1 to 256 characters in length.
     *   If the Key field is set to TagKey, the value must be 1 to 256 characters in length and can contain letters, digits, and special characters `/ _ - . + = @ :`.
     *   If the Key field is set to TagValue, the value must be 1 to 256 characters in length and can contain letters, numbers, and special characters `/ _ - . + = @ :`.
     *
     * The logical relationship between values of the Values field in a key-value pair is OR. Example: `[ {"Key":"SecretName", "Values":["sec1","sec2"]}]`. In this example, the semantics are `SecretName=sec 1 OR SecretName=sec 2`.
     * @example [{"Key":"SecretName", "Values":["Val1","Val2"]}]
     *
     * @var string
     */
    public $filters;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 2
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'fetchTags'  => 'FetchTags',
        'filters'    => 'Filters',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fetchTags) {
            $res['FetchTags'] = $this->fetchTags;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchTags'])) {
            $model->fetchTags = $map['FetchTags'];
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
