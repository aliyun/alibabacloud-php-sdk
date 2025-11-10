<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class ApiMcpServerValidateHclResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $diagnosticReport;

    /**
     * @var string[]
     */
    public $errors;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var bool
     */
    public $isValid;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $warnings;
    protected $_name = [
        'diagnosticReport' => 'diagnosticReport',
        'errors' => 'errors',
        'hash' => 'hash',
        'isValid' => 'isValid',
        'parameters' => 'parameters',
        'requestId' => 'requestId',
        'warnings' => 'warnings',
    ];

    public function validate()
    {
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosticReport) {
            $res['diagnosticReport'] = $this->diagnosticReport;
        }

        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['errors'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hash) {
            $res['hash'] = $this->hash;
        }

        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['warnings'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['diagnosticReport'])) {
            $model->diagnosticReport = $map['diagnosticReport'];
        }

        if (isset($map['errors'])) {
            if (!empty($map['errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['errors'] as $item1) {
                    $model->errors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['hash'])) {
            $model->hash = $map['hash'];
        }

        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['warnings'])) {
            if (!empty($map['warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['warnings'] as $item1) {
                    $model->warnings[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
